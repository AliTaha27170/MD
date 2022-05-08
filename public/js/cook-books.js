let booksCount = document.querySelectorAll(".book-card").length;
let booksCountSpan = document.getElementById("books_count");
if (booksCount == 0) {
    booksCountSpan.innerText = "No books";
} else if (booksCount == 1) {
    booksCountSpan.innerText = booksCount + " " + "book";
} else {
    booksCountSpan.innerText = booksCount + " " + "books";
}
