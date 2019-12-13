$('[data-toggle="confirmation"][data-message]').on('click', function (event) {
    let message = $(this).data('message');

    return confirm(message) || event.preventDefault();
});