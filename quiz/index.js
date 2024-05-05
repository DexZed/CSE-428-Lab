document.addEventListener("DOMContentLoaded", function() {
    const genre = document.getElementsByClassName(".fiction")
    generateOffCanvasContent(genre.innerHTML) ;
});

const fiction = [
    { title: "Book 1", cover: "Cover 1", synopsis: "Synopsis 1", price: "$10" },
    { title: "Book 2", cover: "Cover 2", synopsis: "Synopsis 2", price: "$12" },
    { title: "Book 3", cover: "Cover 3", synopsis: "Synopsis 3", price: "$15" }
  ] ;


function generateOffCanvasContent(genre) {
    const offCanvasBody = document.querySelector(".offcanvas-body");
    if (genre == "Fiction") {
        offCanvasBody.innerHTML = `<table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>${fiction.name}</td>
                <td>${fiction.synopsis}</td>
                <td>${fiction.price}</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>`;
    }
   
   
}
