function find_book(button_id){
    var thumbnail = document.getElementById(button_id);
    var xml = new XMLHttpRequest();

    xml.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200){
            var ans = JSON.parse(this.responseText);

            localStorage.setItem("thumbnail", ans[0]);
            localStorage.setItem("title", ans[1]);
            localStorage.setItem("subtitle", ans[2]);
            localStorage.setItem("author", ans[3]);
            localStorage.setItem("year", ans[4]);
            localStorage.setItem("description", ans[5]);

            window.open("book_page.php");
        }
    }

    xml.open("GET", "database.php?thumbnail=" + thumbnail.src, true);
    xml.send();
}
