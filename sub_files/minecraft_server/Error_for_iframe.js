setTimeout(cheack_iframe, 1000);
// Check if the URL contains the total_fail parameter
if (location.href.includes("total_fail=")) {
    // Extract the value of total_fail from the URL
    switch (location.href.split("total_fail=")[1]) {
        // Convert the value to an integer
        // and assign it to the total variable
        //case statements for 0-5
        case "1":
            var total = 1;
            break;
        case "2":
            var total = 2;
            break;
        case "3":
            var total = 3;
            break;
        case "4":
            var total = 4;
            break;
        case "5":
            var total = 5;
            break;
        default:
            var total = 0;
    }
}
else {
    var total = 0;
}
function cheack_iframe() {
    var iframe_error = document.getElementById("iframes");
    // Check if the iframe has loaded successfully
    if (location.href.includes("total_fail=5")) {
        // i don't kneed this anymore as i'm going to use php $_GET to check if the user has failed 5 times
        // if the user has failed 5 times, then we will display the error message
        // and not check the iframe anymore
        // this just here just in case i need it in the future
        return;}
    iframe_error.onerror = () =>
    {
        total = total + 1
        iframe_error.remove();
        Creating_Error_info()
    }
}
var seconds = 20;
function Creating_Error_info()
{

    //getting the main section and title
    var title = document.getElementById("title");
    var Main_sections = document.getElementById("Main_section");
    title.textContent = "Error Loading The Map";

    // creating the elements
    var Main_section = document.createElement("section");
    var error_info = document.createElement("p");
    var count_down_to_reload = document.createElement("p");
    var links_div = document.createElement("div");
    var try_again = document.createElement("a");
    var go_home = document.createElement("a");

    count_down_to_reload.id = "count_down";
    Main_section.className = "error_div";
    links_div.className = "links";
    Main_section.style.height = "250px";
    //setting the textcontent of the elements
    count_down_to_reload.innerHTML = "we will try to reconnect in:  " + seconds + " seconds...";
    error_info.innerHTML = "There was an error loading the map<br>  Attempts To Connect To The Map Server: " + total + "/5";
    try_again.textContent = "Try Again";
    go_home.textContent = "Go Home";
    //telling who child it is
    Main_sections.appendChild(Main_section);
    Main_section.appendChild(title);
    Main_section.appendChild(count_down_to_reload);
    Main_section.appendChild(error_info);
    Main_section.appendChild(links_div);
    links_div.appendChild(try_again);
    links_div.appendChild(go_home);




    go_home.onclick = Go_Home;
    try_again.onclick = Reload_Page;
    count_down()

}
function count_down() {
    var count_down_to_reload = document.getElementById("count_down");
    seconds--
    count_down_to_reload.textContent = "we will try to reconnect in: " + seconds + " seconds...";
    if (seconds == 0) {
        Reload_Page();
        return;
    }
    else {

        setTimeout(count_down, 1000);
    }

}
function Reload_Page() {
    location.href = "Server_map.php?total_fail=" + total;
}
function Go_Home() {
    location.href = "../../index.php";
}