//  this function is when refresh page 
document.addEventListener("DOMContentLoaded", function () {
    $(document).ready(function () {
        $(".js-sidebar-toggle").click(function () {
            // alert("hello World");
            $("#sidebar").toggleClass("collapsed");
        });

        $(".sidebar-link[data-bs-toggle='collapse']").on("click", function () {
            const target = $(this).attr("data-bs-target");
            $(target).collapse("toggle"); // Bootstrap's collapse method
        });

        window.addEventListener("livewire:navigate", function () {
            initializeSidebar();
        });
        initializeSidebar();
    });

});

// this function is when click side bar menu 
$(document).ready(function () {
    $(".js-sidebar-toggle").click(function () {
        // alert("hello World");
        $("#sidebar").toggleClass("collapsed");
    });

    $(".sidebar-link[data-bs-toggle='collapse']").on("click", function () {
        const target = $(this).attr("data-bs-target");
        $(target).collapse("toggle"); // Bootstrap's collapse method
    });

    window.addEventListener("livewire:navigate", function () {
        initializeSidebar();
    });
    initializeSidebar();
});

function initializeSidebar() {
    $(".sidebar-item a").each(function () {
        if (window.location.href.includes($(this).attr("href"))) {
            $(this).closest(".sidebar-item").addClass("active");
            $(this).closest(".sidebar-dropdown").addClass("show");
        }
    });
}

$(document).ready(function () {
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right"
    };
});


$(document).ready(function () {
    function updateSelectAllCheckboxes() {
        const allChecked = $('.permission-checkbox:checked').length === $('.permission-checkbox').length;
        $('#checkAll').prop('checked', allChecked);

        $('.check-all-group').each(function () {
            const card = $(this).closest('.card');
            const groupCheckboxes = card.find('.permission-checkbox');
            const groupChecked = groupCheckboxes.length === groupCheckboxes.filter(':checked')
                .length;
            $(this).prop('checked', groupChecked);
        });
    }

    // Initial update of "Select All" checkboxes
    updateSelectAllCheckboxes();

    // Handle changes in permission checkboxes
    $('.permission-checkbox').change(function () {
        updateSelectAllCheckboxes();
    });

    // Handle changes in "Select All" checkboxes
    $('#checkAll').change(function () {
        const checked = this.checked;
        $('.permission-checkbox').prop('checked', checked);
        $('.check-all-group').prop('checked', checked);
    });

    $('.check-all-group').change(function () {
        const groupChecked = this.checked;
        const card = $(this).closest('.card');
        card.find('.permission-checkbox').prop('checked', groupChecked);
        updateSelectAllCheckboxes();
    });
});

// Listen for the 'success' event dispatched by Livewire
window.addEventListener('success', event => {
    toastr.success(event.detail[0].message); // Show the success message
});

window.addEventListener('warning', event => {
    console.log(event.detail); // Check if the message is logged here
    toastr.warning(event.detail[0].message); // Show warning message
});

window.addEventListener('error', event => {
    toastr.error(event.detail[0].message); // Show error message
});

