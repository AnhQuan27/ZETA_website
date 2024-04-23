$(document).ready(function() {
    $('#example').DataTable({
        language: {
            searchPlaceholder: "Search...",
            lengthMenu: 'Result: _MENU_<a href="#" class="btn btn-primary btn-add">Add new</a>',
            info: "Showing page _PAGE_ of _PAGES_",
        },
        lengthMenu: [7, 10, 20, 50],
        pageLength: 10,
        columnDefs: [
            {
                orderable: false, 
                targets: 5, 
            }
        ],
    });
});

$(document).ready(function() {
    var addProductUrl = $('#product').data('add-url');
    $('#product').DataTable({
        language: {
            searchPlaceholder: "Search...",
            lengthMenu: 'Result: _MENU_<a href="'+ addProductUrl +'" class="btn btn-primary btn-add">Add new</a>',
            info: "Showing page _PAGE_ of _PAGES_",
        },
        lengthMenu: [7, 10, 20, 50],
        pageLength: 10,
        columnDefs: [
            {
                orderable: false, 
                targets: 6, 
            }
        ],
        order: false,
    });
});

$(document).ready(function() {
    var addUserUrl = $('#user').data('add-url');
    $('#user').DataTable({
        language: {
            searchPlaceholder: "Search...",
            lengthMenu: 'Result: _MENU_<a href="'+ addUserUrl +'" class="btn btn-primary btn-add">Add new</a>',
            info: "Showing page _PAGE_ of _PAGES_",
        },
        lengthMenu: [7, 10, 20, 50],
        pageLength: 10,
        columnDefs: [
            {
                orderable: false, 
                targets: 6, 
            }
        ],
    });
});


$(document).ready(function() {
    $('#order').DataTable({
        language: {
            searchPlaceholder: "Search...",
            info: "Showing page _PAGE_ of _PAGES_",
        },
        lengthMenu: [7, 10, 20, 50],
        pageLength: 10,
        columnDefs: [
            {
                orderable: false, 
                targets: 7, 
            }
        ],
        order: false,

    });
});

$(document).ready(function() {
    $('#invoice').DataTable({
        language: {
            searchPlaceholder: "Search...",
            info: "Showing page _PAGE_ of _PAGES_",
        },
        lengthMenu: [7, 10, 20, 50],
        pageLength: 10,
        columnDefs: [
            {
                orderable: false, 
                targets: 6, 
            }
        ],
        order: false,
        
    });
});