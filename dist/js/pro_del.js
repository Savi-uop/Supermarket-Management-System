// Generated by CoffeeScript 1.6.2
$(function() {
  
  if ($("#delete-product")) {
    return $("#delete-product").click(function() {
      var post;
      post = void 0;
      post = $.post("http://localhost/Supermarket1/HomeController/deleteBillProduct", $("#edit-qty-form").serialize(), (function(data) {
        	$("#edit-qty-modal").modal("hide");
        	return location.reload();
       
      }), "json");
      return post.error(function() {
        return alert("Oops couldn't Delete. Please try again.");
      });
    });
  }
  
});












