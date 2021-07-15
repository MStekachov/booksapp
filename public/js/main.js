$(document).ready(function(){
    $('.catalog div').on('click', function(e) {
        e.preventDefault();
        let bookId = $(this).parent()[0].dataset.bookId;
        console.log(e);
        document.location.href = `/view/${bookId}`;
    });
});