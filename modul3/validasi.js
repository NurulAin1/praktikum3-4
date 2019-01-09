function validasi(){
    var nama = document.getElementById('nama');
    var password = document.getElementById('password');

    if(username.value == "")
    {
        alert("Anda belum mengisi username");
        username.focus();
        return false;
    }
    else if(password.value == "")
    {
        alert("Anda belum mengisi password");
        password.focus();
        return false;
    }
    else{
        return true;
    }
}