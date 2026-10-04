const buttonlog = document.getElementById("login");
const buttonReg = document.getElementById("register");
const buttonUpl = document.getElementById("upload");
const butcom = document.getElementById("comments");
let nameExpress = /^[a-zA-Z]+$/;
let emailExpress = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

if (buttonlog) {
    buttonlog.addEventListener("click", function (e) {
        let email = document.getElementById("email").value;
        let password = document.getElementById("password").value;
        let error = "";

        if (email.trim() === "") {
            error = "Email is required";
            e.preventDefault();
        }
        else if (!emailExpress.test(email)) {
            error = error + "\n" + "please write  a valid format email ";

            e.preventDefault();
        }


        if (password.trim() === "") {
            error = error + "\n" + "password is required";
            e.preventDefault();
        }
        if (error !== "") {
            alert(error);
        }


    });
}

if (buttonReg) {
    buttonReg.addEventListener("click", function (e) {
        let first_name = document.getElementById("Fname").value;
        let last_name = document.getElementById("Lname").value;
        let email = document.getElementById("em").value;
        let password = document.getElementById("pass").value;
        let error = "";
        if (first_name.trim() === "") {
            error = "first name is required";
            e.preventDefault();
        }
        else if (!nameExpress.test(first_name)) {
            error = error + "\n" + "first name must only letters";
            e.preventDefault();
        }
        else if (first_name.length > 50) {
            error = error + "\n" + "first name is  so large";
            e.preventDefault();
        }


        // last name
        if (last_name.trim() === "") {
            error = error + "\n" + "last name is required";
            e.preventDefault();
        }
        else if (!nameExpress.test(last_name)) {
            error = error + "\n" + "last name must only letters";
            e.preventDefault();
        }
        else if (last_name.length > 50) {
            error = error + "\n" + "last name is  so large";
            e.preventDefault();
        }


        //email
        if (email.trim() === "") {
            error = error + "\n" + "Email is required";
            e.preventDefault();
        }
        else if (!emailExpress.test(email)) {
            error = error + "\n" + "please write  a valid format email ";
            e.preventDefault();
        }

        // passowrd
        if (password.trim() === "") {
            error = error + "\n" + "password is required";
            e.preventDefault();
        }
        if (error !== "") {
            alert(error);
        }


    });
}

if (buttonUpl) {
    buttonUpl.addEventListener("click", function (e) {
        let title = document.getElementById("title").value;
        let choose_file = document.getElementById("choose_file").value;
        let error = "";

        if (title.trim() === "") {
            error = error + "\n" + "please Enter a Title";
            e.preventDefault();
        }
        else if (title.length > 200) {
            error = error + "\n" + "title is  so large";
            e.preventDefault();
        }
        if (choose_file.length === 0) {
            error = error + "\n" + "please choose a file";
            e.preventDefault();
        }
        if (error !== "") {
            alert(error);
        }

    });
}
if (butcom) {
    butcom.addEventListener("click", function (e) {
        let comment = document.getElementById("comm").value;
        let error = "";

        if (comment.trim() === "") {
            error = "please Enter a comment";
            e.preventDefault();
        }

        if (error !== "") {
            alert(error);
        }

    });
}



