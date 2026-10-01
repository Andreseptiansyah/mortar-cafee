function mining_industry_open_tab(evt, cityName) {
    var mining_industry_i, mining_industry_tabcontent, mining_industry_tablinks;
    mining_industry_tabcontent = document.getElementsByClassName("tabcontent");
    for (mining_industry_i = 0; mining_industry_i < mining_industry_tabcontent.length; mining_industry_i++) {
        mining_industry_tabcontent[mining_industry_i].style.display = "none";
    }
    mining_industry_tablinks = document.getElementsByClassName("tablinks");
    for (mining_industry_i = 0; mining_industry_i < mining_industry_tablinks.length; mining_industry_i++) {
        mining_industry_tablinks[mining_industry_i].className = mining_industry_tablinks[mining_industry_i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

jQuery(document).ready(function () {
    jQuery( ".tab-sec .tablinks" ).first().addClass( "active" );
});