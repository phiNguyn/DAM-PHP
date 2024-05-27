

function chonAnh(x) {
    
    document.getElementById("anh").setAttribute("src", x.src); 
}

const input = document.querySelector('.password-toggle input');
const btnIcon = document.querySelector('.password-toggle .icon');
 btnIcon?.addEventListener("click", function(){
    const inputType = input?.getAttribute("type");
    input?.setAttribute("type",inputType ===     "password" ? "text" : "password"
    );
    const icons = this.children;
    [...icons]?.forEach((item) => item.classList.toggle("is-active"));
 });

 const btnLogin = document.getElementById("btnLogin");
 btnLogin.addEventListener("click", function(){
    
 })


