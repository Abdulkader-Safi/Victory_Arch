import "./bootstrap";

import * as THREE from "three";
import { GLTFLoader } from "three/examples/jsm/loaders/GLTFLoader.js";

console.log("Hello World from app.js");

const canvas = document.getElementById("globe");
const loader = new GLTFLoader();
const scene = new THREE.Scene();
const ambientLight = new THREE.AmbientLight(0xffffff, 5);
scene.add(ambientLight);

const renderer = new THREE.WebGLRenderer({
    antialias: true,
    alpha: true,
});
const camera = new THREE.PerspectiveCamera(
    75,
    canvas.offsetWidth / canvas.offsetHeight,
    0.1,
    1000
);

let globe;

renderer.setSize(canvas.offsetWidth * 0.9, canvas.offsetHeight * 0.9);
canvas.appendChild(renderer.domElement);

loader.load(
    "img/3d/globe.glb",
    function (gltf) {
        globe = gltf.scene;
        scene.add(globe);
    },
    undefined,
    function (error) {
        console.error(error);
    }
);

camera.position.set(0, 10, 10);
camera.lookAt(0, 0, 0);

renderer.setAnimationLoop(animate);

function animate() {
    if (globe) {
        globe.rotation.y += 0.01;
        globe.position.y += Math.sin(Date.now() * 0.005) * 0.01;
    }
    renderer.render(scene, camera);
}

window.addEventListener("resize", () => {
    const width = canvas.offsetWidth;
    const height = canvas.offsetHeight;

    camera.aspect = width / height;
    camera.updateProjectionMatrix();

    renderer.setSize(width * 0.9, height * 0.9);
});
