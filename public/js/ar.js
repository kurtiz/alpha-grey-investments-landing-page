$("#appointmentSubmit").on("click", function () {
    let fields = $("#appointmentForm input"),
        appointmentSuccess = $("#appointmentSuccess"),
        appointmentError = $("#appointmentError")
    let required = 0
    let emptyFields = []
    for (let i = 0; i < fields.length; i++) {
        if (fields[i].value.trim() === "") {
            required++
            console.log(fields[i].value.trim())
            emptyFields.push(i)
        }
    }

    if (required === 0) {
        $.post(base_url + "/appointment", $("#appointmentForm").serialize())
            .done(function (data) {
                if(data.msg === "success"){
                    showHide(appointmentSuccess, "show")
                    setTimeout( () => {
                        showHide(appointmentSuccess, "hide")
                    }, 5000)
                } else {
                    showHide(appointmentError, "show")
                    setTimeout(
                        () => {
                            showHide(appointmentError, "hide")
                        },
                        5000)
                }

            });
    } else {
        let alert_msg = "Fill the following fields: \n"
        for (let i = 0; i < emptyFields.length; i++) {
             alert_msg += fields[emptyFields[i]].getAttribute("data-label") + "\n"
        }

        alert(alert_msg)
    }
})


$("#quoteSubmit").on("click", function () {
    let fields = $("#quoteForm input"),
        quoteSuccess = $("#quoteSuccess"),
        quoteError = $("#quoteError")
    let required = 0
    let emptyFields = []
    for (let i = 0; i < fields.length; i++) {
        if (fields[i].value.trim() === "") {
            required++
            console.log(fields[i].value.trim())
            emptyFields.push(i)
        }
    }

    if (required === 0) {
        $.post(base_url + "/quote", $("#quoteForm").serialize())
            .done(function (data) {
                if(data.msg === "success"){
                    showHide(quoteSuccess, "show")
                    setTimeout( () => {
                        showHide(quoteSuccess, "hide")
                    }, 5000)
                } else {
                    showHide(quoteError, "show")
                    setTimeout(() => {
                        showHide(quoteError, "hide")
                    },
                        5000)
                }

            });
    } else {
        let alert_msg = "Fill the following fields: \n"
        for (let i = 0; i < emptyFields.length; i++) {
             alert_msg += fields[emptyFields[i]].getAttribute("data-label") + "\n"
        }

        alert(alert_msg)
    }
})

function showHide(element, state){
    switch(state){
        case "show":
            element.slideDown(
                () => {
                element.show()
            })
            break;

        case "hide":
            element.slideUp(
                () => {
                element.hide()
            })
            break;
    }
}
