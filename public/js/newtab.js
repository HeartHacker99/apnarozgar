function show_my_receipt() {

    // open the page as popup //
    var page = 'http://www.google.com';
    var myWindow = window.open(page, "_blank", "scrollbars=yes,width=400,height=500,top=300");

    // focus on the popup //
    myWindow.focus();

    // if you want to close it after some time (like for example open the popup print the receipt and close it) //

    //  setTimeout(function() {
    //    myWindow.close();
    //  }, 1000);

}
