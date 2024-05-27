  <!-- end <div class="dash-content"> -->
</div>
<!-- end <div class="dash-content"> -->
    </section> 
    <script src="view/app.js"></script>
  </body>
  <!-- animation form js -->
  <script>
    var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
  </script>



</html>