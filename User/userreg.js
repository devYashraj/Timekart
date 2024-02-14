const form = document.getElementById('form');
form.addEventListener('submit', (e) => {
    const errormsg = document.getElementsByClassName('error');
    const frminp = document.getElementsByClassName('frminp');
    function setError(msg, loc) {
        if (msg == "") {
            errormsg[loc].innerHTML = msg;
            frminp[loc].style.borderColor = "green";
        }
        else {
            e.preventDefault();
            if (msg == "Password Mismatch!") {
                errormsg[loc + 1].innerHTML = msg;
                const pswd2 = document.getElementById('pswd2');
                pswd2.value = "";
            }
            errormsg[loc].innerHTML = msg;
            frminp[loc].style.borderColor = "red";
        }
    }
    var letters = /^[A-Za-z]+$/;
    var numbers = /^[0-9]+$/;
    var illegalChars = /[\W_]/;
    const fname = document.getElementById('fname').value;
    const lname = document.getElementById('lname').value;
    const phno = document.getElementById('phno').value;
    const eml = document.getElementById('eml').value;
    const city = document.getElementById('city').value;
    const uname = document.getElementById('uname').value;
    const pswd1 = document.getElementById('pswd1').value;
    const pswd2 = document.getElementById('pswd2').value;
    const sq1 = document.getElementById('sq1').value;
    const sq2 = document.getElementById('sq2').value;
    if (fname == "" || !fname.match(letters))
        setError("Enter a valid name!", 0);
    else
        setError("", 0);

    if (lname == "" || !lname.match(letters))
        setError("Enter a valid name!", 1);
    else
        setError("", 1);

    if (phno.length != 10 || !phno.match(numbers))
        setError("Enter a valid phone number!", 2);
    else
        setError("", 2);

    if (!eml.match("@"))
        setError("Enter a valid Email ID!", 3);
    else
        setError("", 3);

    if (city == "" || !city.match(letters))
        setError("Enter a valid name!", 5);
    else
        setError("", 5);

    if (uname == "")
        setError("Enter a valid username!", 6);
    else if ((uname.search(/[0-9]+/) == -1))
        setError("Use atleast 1 number!", 6);
    else if (uname.length < 8)
        setError("Username must have min 8 char length!", 6);
    else
        setError("", 6);

    if (pswd1 == "")
        setError("Enter a password!", 7);
    else if (pswd1.length < 8 || pswd1.length > 12)
        setError("Min 8 and Max 12 characters!", 7);
    else if (pswd1 != pswd2)
        setError("Password Mismatch!", 7);
    else if ((pswd1.search(/[0-9]+/) == -1))
        setError("Use atleast 1 number", 7);
    else if ((pswd1.search(/[A-Z]+/) == -1))
        setError("Use atleast 1 uppercase letter", 7);
    else {
        setError("", 7);
        setError("", 8);
    }

    if (sq1 == "" || !sq1.match(letters))
        setError("Enter a valid name!", 9);
    else
        setError("", 9);

    if (sq2 == "" || !sq2.match(letters))
        setError("Enter a valid name!", 10);
    else
        setError("", 10);
})