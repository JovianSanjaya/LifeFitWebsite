function showServiceInformation(TypeofService){
    if (TypeofService === 'Home Personal Care') {
        document.getElementById("ServicesInfomationsTitle").innerHTML = "Home Personal Care";
        document.getElementById("ServicesInfomationsDescription").innerHTML = "Our trained local caregivers help to assist you and your loved one's daily activities for a safe and independent living at home. This includes eating, cleaning, toileting and transferring.";
        document.getElementById("ServicesInfomationsImage").src = "img/HomePersonalCareImage.png";
    }else if (TypeofService === 'Home Therapy'){
        document.getElementById("ServicesInfomationsTitle").innerHTML = "Home Therapy";
        document.getElementById("ServicesInfomationsDescription").innerHTML = "Our experienced local therapists are here to assist you in your rehabilitation and recovery efforts when you return home, through personalised exercise and therapy treatment sessions.";
        document.getElementById("ServicesInfomationsImage").src = "img/HomeTherapyImage.png";
    }else if (TypeofService === 'Home Doctor'){
        document.getElementById("ServicesInfomationsTitle").innerHTML = "Home Doctor";
        document.getElementById("ServicesInfomationsDescription").innerHTML = "Feeling sick or experiencing discomfort? Have the loved one who is feeling unwell but unable or unwilling to visit the clinic? Our team of local doctors are here to respond to you or your loved one 24/7.";
        document.getElementById("ServicesInfomationsImage").src = "img/HomeDoctorImage.png";
    }else if (TypeofService === 'Tele Consultation'){
        document.getElementById("ServicesInfomationsTitle").innerHTML = "Tele-Consultation";
        document.getElementById("ServicesInfomationsDescription").innerHTML = "Our team of local doctors are available to attend to your medical needs through a video call 24/7, anywhere in Singapore.";
        document.getElementById("ServicesInfomationsImage").src = "img/TeleConsultationImage.jpg";
    }else if (TypeofService === 'Medicine Delivery'){
        document.getElementById("ServicesInfomationsTitle").innerHTML = "Medicine Delivery";
        document.getElementById("ServicesInfomationsDescription").innerHTML = "Save the hassle, cost and time of travelling to and fro home and pharmacies. Your medication will be delivered to your doorstep after your post-consultation with our doctors.";
        document.getElementById("ServicesInfomationsImage").src = "img/MedicineDeliveryImage.jpg";
    }
}
let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
let i;
let slides = document.getElementsByClassName("mySlides");
let dots = document.getElementsByClassName("dot");
if (n > slides.length) {
    slideIndex = 1;
}
if (n < 1) {
    slideIndex = slides.length;
}
for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
}
for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";
dots[slideIndex-1].className += " active";
}




