async function Creating_elements_for_loading_page(what_JSON_file_to_read)
{ 
    var main_items = document.getElementById("Main_section")
    fetch(what_JSON_file_to_read)
    .then(res => res.json())
    .then(items => 
        {
            
            for(var item of items){
                
            var link = document.createElement("a")  
            var create_partain = document.createElement("section")
                create_partain.innerHTML += (
                    "<div class='End_of_div'>" + 
                    item.FontAwason_icon +
                    "<p>" + item.title + "</p>" + 
                    "</div>"+
                    "<div>"+
                    "<p>" + item.information_about_title + "</p>"+
                    "</div>"
                )
            create_partain.className = 'Updates_section'
            link.href = item.A_Link

            main_items.appendChild(link)
            link.appendChild(create_partain)
                    
            }
        })
    //adding the animation   
}

if (location.href.includes("http://localhost/website/Contact.php") || location.href.includes("https://errornotjoin.tech/Contact.php") || location.href.includes("Contact.php") || location.href.includes("https://errornotjoin.tech/Contact.php"))
{
    Creating_elements_for_loading_page("JSON/contact_page_information.json");
}
else if (location.pathname.includes("index.php")  || location.href.includes("https://errornotjoin.tech/index.php") ||  location.href.includes("http://localhost/website/index.php") || location.href.includes("https://errornotjoin.tech/") ||  location.href.includes("http://localhost/website"))
{
    Creating_elements_for_loading_page("JSON/Home_page_information.json");
}
else
{
    console.log("This is not the index page or contact page so the animation will not be shown");
}