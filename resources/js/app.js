import "./bootstrap";
import Darkmode from "darkmode-js";

import Alpine from "alpinejs";
import focus from "@alpinejs/focus";
window.Alpine = Alpine;
Alpine.plugin(focus);
Alpine.start();

const $ = (selector) => document.querySelector(selector);
const $$ = (selector) => document.querySelectorAll(selector);

var options = {
    bottom: "51px", // default: '32px'
    right: "17px", // default: '32px'
    left: "unset", // default: 'unset'
    time: "0.5s", // default: '0.3s'
    mixColor: "#fff", // default: '#fff'
    backgroundColor: "#fff", // default: '#fff'
    buttonColorDark: "#100f2c", // default: '#100f2c'
    buttonColorLight: "#fff", // default: '#fff'
    saveInCookies: true, // default: true,
    label: "🌓", // default: ''
    autoMatchOsTheme: true, // default: true
};
const darkmode = new Darkmode(options);
darkmode.showWidget();

const checkboxes = $$(".checkbox-task");
if (checkboxes) {
    checkboxes.forEach((checkbox) => {
        checkbox.addEventListener("click", (event) => {
            const containerTask = event.target.closest(".container-task");
            const checkboxAnim = containerTask.querySelector(
                ".checkbox-t-animation"
            );
            const checkboxIcon = containerTask.querySelector(".checkbox-icon");
            const taskSpan = containerTask.querySelector(".task-span-title");
            checkboxIcon.classList.add("bg-checkbox");
            checkboxAnim.classList.remove("hidden");
            taskSpan.classList.add("bg-c-span");
        });
    });
}

const btnmenu = $(".btn-menu");
if (btnmenu) {
    btnmenu.addEventListener("click", () => {
        const navheader = $(".nav-header-landing");
        navheader.classList.toggle("navheaderactive");
    });
}

const btnopenmenu = $(".btn-open-menu");
if (btnopenmenu) {
    const menutaskapp = $(".menu-task-app");
    const headertaskappanimation = $(".header-task-app-animation");
    btnopenmenu.addEventListener("click", () => {
        menutaskapp.classList.toggle("menu-task-app-active-menu");
        headertaskappanimation.classList.toggle("header-task-app-animation-ml");
    });
}

window.addEventListener("resize", () => {
    const menutaskapp = $(".menu-task-app");
    const maincontainerapp = $(".main-container-app");
    const headertaskappanimation = $(".header-task-app-animation");
    if (menutaskapp) {
        if (window.innerWidth < 450) {
            menutaskapp.classList.add("menu-task-app-active-menu");
            maincontainerapp.classList.add("main-container-app-active-menu");
            headertaskappanimation.classList.remove(
                "header-task-app-animation-ml"
            );
        } else {
            menutaskapp.classList.remove("menu-task-app-active-menu");
            maincontainerapp.classList.remove("main-container-app-active-menu");
        }
    }
});

window.addEventListener("load", () => {
    const menutaskapp = $(".menu-task-app");
    const maincontainerapp = $(".main-container-app");
    if (menutaskapp) {
        if (window.innerWidth < 450) {
            menutaskapp.classList.add("menu-task-app-active-menu");
            maincontainerapp.classList.add("main-container-app-active-menu");
        } else {
            menutaskapp.classList.remove("menu-task-app-active-menu");
            maincontainerapp.classList.remove("main-container-app-active-menu");
        }
    }
});

const darkmodetoggle = $(".darkmode-toggle");
if (darkmodetoggle) {
    darkmodetoggle.style.bottom = "16px";
}

Livewire.on("errorUpdateTask", function (message) {
    Swal.fire({
        icon: "warning",
        title: "Upps!",
        html: message,
        confirmButtonText: "¡Entendido!",
        confirmButtonColor: "#1e90ff",
    });
});
Livewire.on("alertsuccescat", function (message) {
    Swal.fire({
        icon: "success",
        title: "Perfecto!",
        html:
            "La categoria" +
            "<br> <b>" +
            message +
            "</b> <br>" +
            "se creo correctamente",
    });
});

Livewire.on("errorDelCat", function (message) {
    Swal.fire({
        icon: "warning",
        title: "Upps!",
        confirmButtonText: "¡Entendido!",
        confirmButtonColor: "#1e90ff",
        html: message,
    });
});
