function help_submit() {
    var human_name = document.getElementById("human_name").value;
    var Order_id = document.getElementById("Order_id").value;
    var message_text = document.getElementById("message_text").value;
    if (human_name != "" && Order_id != "" && message_text != "") {
        alert("Sent\n You will get a call in 15 minutes \n Thank You")
    } else {
        swal({
            title: "Fields Empty!!",
            text: "Please fill the valid data!",
            icon: "warning",
            button: "Ok"
        });
    }
}

function feedback_submit() {
    var feedback_name = document.getElementById("feedback_name").value;
    var feedback_msg = document.getElementById("feedback_msg").value;

    if (feedback_name != "" && feedback_msg != "") {
        alert("Thanks for your Feedback.")
    } else {
        alert("Please fill the data.")
    }
}