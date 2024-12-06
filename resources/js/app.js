import "./bootstrap";

import * as THREE from "three";
import { GLTFLoader } from "three/examples/jsm/loaders/GLTFLoader.js";

const canvas = document.getElementById("globe");
const loader = new GLTFLoader();
const scene = new THREE.Scene();
// const light = new THREE.DirectionalLight(0xffffff, 1);
const ambientLight = new THREE.AmbientLight(0xffffff, 1); // White light at full intensity
scene.add(ambientLight);

const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
const camera = new THREE.PerspectiveCamera(
    75,
    canvas.offsetWidth / canvas.offsetHeight, // Initial aspect ratio based on the square container
    0.1,
    1000
);

let globe;

// Set up renderer size and attach it to the container
renderer.setSize(canvas.offsetWidth, canvas.offsetHeight);
canvas.appendChild(renderer.domElement);

// Configure the light
// light.position.set(0, 20, 20); // Move the light in front of the globe along the Z-axis
// light.target.position.set(0, 0, 0); // Target the globe's center
// scene.add(light);

// Load the 3D model
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

// Set initial camera position
camera.position.set(0, 10, 10);
camera.lookAt(0, 0, 0);

// Animation loop
renderer.setAnimationLoop(animate);

function animate() {
    if (globe) {
        globe.rotation.y += 0.01;
        globe.position.y += Math.sin(Date.now() * 0.005) * 0.02;
    }
    renderer.render(scene, camera);
}

// Resize handling to keep the globe centered
window.addEventListener("resize", () => {
    // Get the new dimensions of the canvas
    const width = canvas.offsetWidth;
    const height = canvas.offsetHeight;

    // Update camera aspect ratio and projection matrix
    camera.aspect = width / height;
    camera.updateProjectionMatrix();

    // Resize the renderer
    renderer.setSize(width, height);
});
