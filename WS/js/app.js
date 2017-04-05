$(".btn-update").click(function() {

    var id = $(this).next().val();

    $(this).addClass("display-none");

    console.log(id);

    $(this).parent().parent().after(""+
    "<form action=\"index.php?page=articles\" method=\"post\"><tr>" +
    "       <td></td>"+
    "       <td><input type=\"text\" name=\"categorie\" placeholder=\"Catégorie\"></td>"+
    "       <td><input type=\"text\" name=\"name\" placeholder=\"Nom de l'article\"></td>"+
    "       <td></td>"+
    "       <td><input type=\"text\" name=\"price\" placeholder=\"Prix de l'article\"></td>"+
    "       <td>" +
    "           <input type=\"submit\" class=\"btn-update\" name=\"action\" value=\"Uptd\">" +

    "           <input type=\"text\" name=\"id\" value=\"" + id + "\" class=\"display-none\">" +
    "       </td>" +
    
    "       <td></td>"+
    " </tr>" +
    "</form>");
})