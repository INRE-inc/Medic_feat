document.getElementById("Pt_info").addEventListener('submitBtn') = function() {
    alert("Thank you for completting this form!.")
    alert("We have one more quick form to get to know what we can do to make your experience the best it can be.")
// store data in JSON formart
    Pat_data = {
        PatFirstName: document.getElementById("first_n").value,
        PatLastName: document.getElementById("last_n").value,
        PatGender: document.getElementById("gender").value,
        PatDOB: document.getElementById("DOB").value,
        PatEmail: document.getElementById("email").value,
        PatPhone: document.getElementById("phone").value,
        PatAddress: document.getElementById("address").value
    }

    Pat_bio_data = {
        PatHeight: document.getElementById("height").value,
        PatWeight: document.getElementById("weight").value,
        PatBMI: PatWeight/ (PatHeight * PatHeight),
        PatGenotype: document.getElementById("genotype").value,
        PatBloodType: document.getElementById("blood_group").value,
        PatHealthConditions: document.getElementById("health_con").value
    }
    
    Pat_lifestyle = {
        PatSmoke: document.getElementById("smoke").value,
        PatDrink: document.getElementById("drink").value,
        PatExercise: document.getElementById("exercise").value,
        PatDetox: document.getElementById("detox").value,
        PatTherapy: document.getElementById("therapy").value,
        PatMeditation: document.getElementById("meditation").value,
        PatOtherHobbies: document.getElementById("other_hobbies").value
    }

    Pat_Intentions = {
        PatTest: document.getElementById("testing").checked,
        PatConsult: document.getElementById("consultation").checked,
        PatART: document.getElementById("ar_tech").checked,
        PatPGD: document.getElementById("pg_testing").checked,
        PatDonation: document.getElementById("donation").checked,
        PatHormone: document.getElementById("hornmone_man").checked,
        PatOtherTreat: document.getElementById("other_tre").value,
        PatPrevTreat: document.getElementById("prev-treat").value
    }

    Pat_Emergency_1 = {
        Pat_Emergency_1_FirstName: document.getElementById("E_first_name_1").value,
        Pat_Emergency_1_LastName: document.getElementById("E_last_name_1").value,
        Pat_Emergency_1_Relationship: document.getElementById("E_relation_1").value,
        Pat_Emergency_1_address: document.getElementById("E_address_1").value,
        Pat_Emergency_1_Phone: document.getElementById("E_numder_1").value,
        Pat_Emergency_1_Email: document.getElementById("E_email_1").value
    }

    Pat_Emergency_2 = {
        Pat_Emergency_2_FirstName: document.getElementById("E_first_name_2").value,
        Pat_Emergency_2_LastName: document.getElementById("E_last_name_2").value,
        Pat_Emergency_2_Relationship: document.getElementById("E_relation_2").value,
        Pat_Emergency_2_address: document.getElementById("E_address_2").value,
        Pat_Emergency_2_Phone: document.getElementById("E_numder_2").value,
        Pat_Emergency_2_Email: document.getElementById("E_email_2").value
    }
};

const fs = require('fs');
fs.writeFile('PatientData.json', JSON.stringify({Pat_data, Pat_bio_data, Pat_lifestyle, Pat_Intentions, Pat_Emergency_1, Pat_Emergency_2}, null, 2), (err) => {
    if (err) throw err;
    console.log('Data written to file')});


// Price Calculator Function

document.getElementById('Ser_opt').onselect = () => {
    function calculatePrice() {
    var StartPrice = 0;

    var Consultaion= InputEvent => {
        if (document.getElementById("consultation").checked){
        StartPrice += 500;}}

    var TotalPrice = () => {
    document.getElementById("total_price").innerText = "Total Price: $" + StartPrice;
    };
};

}