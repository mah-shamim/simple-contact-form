$(document).ready(function() {
    $('#contactForm').on('submit', function(event) {
        event.preventDefault();

        $.ajax({
            url: 'process_form.php',
            type: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                alert('Message sent successfully!');
                $('#contactForm')[0].reset();
            },
            error: function(xhr, status, error) {
                alert('An error occurred: ' + error);
            }
        });
    });
});
