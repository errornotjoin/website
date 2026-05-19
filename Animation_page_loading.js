List_of_contact = ['<','Go Back','Email','Twitter','Website','GitHub'];
List_of_links_contact = ['index.php','mailto:errornotjoin@duck.com','https://twitter.com/errornotjoin','https://errornotjoin.tech','https://errornotjoin.tech', 'https://github.com/errornotjoin'];

var x = 0 ;

function Creating_items_for_contact_page()
{  if (x == List_of_contact.length)
    {
        return;
    }
    else
    {
        var Main_section = document.getElementById("The_main_items");
        var a = document.createElement("a");
        var section = document.createElement("section");
        var image = document.createElement("img")
        var div_end_of_div = document.createElement("div");
        var div_title_center = document.createElement("div");
        var title = document.createElement("p");
        var title2 = document.createElement("p");
        div_end_of_div.className = "End_of_div";
        div_title_center.className = "title_center";

        section.className = "Updates_section";
        Main_section.appendChild(a);
        a.appendChild(section);
        section.appendChild(image)
        section.appendChild(div_end_of_div);
        section.appendChild(div_title_center);
        div_end_of_div.appendChild(title);
        div_title_center.appendChild(title2);
        title2.textContent = "Contact Me via " + List_of_contact[x];
        image.src = list_of_main_page_images[x]
        title.textContent = List_of_contact[x];
        a.href = List_of_links_contact[x];
        section.style.animation = "Loading_page 0.5s ease-in-out forwards";
        x++
        setTimeout(Creating_items_for_contact_page, 500);
    }
}
async function Creating_elements_for_loading_page()
{ 
    var main_items = document.getElementById("Main_section")
    fetch("JSON/Information_page_loader.json")
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
    Creating_items_for_contact_page();
}
else if (location.pathname.includes("index.php")  || location.href.includes("https://errornotjoin.tech/index.php") ||  location.href.includes("http://localhost/website/index.php") || location.href.includes("https://errornotjoin.tech/") ||  location.href.includes("http://localhost/website"))
{
    Creating_elements_for_loading_page();
}
else
{
    console.log("This is not the index page or contact page so the animation will not be shown");
}