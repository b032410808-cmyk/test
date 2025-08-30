// Import the THREE.js library
import * as THREE from "https://cdn.skypack.dev/three@0.129.0/build/three.module.js";
// OrbitControls allow the camera to move around the scene
import { OrbitControls } from "https://cdn.skypack.dev/three@0.129.0/examples/jsm/controls/OrbitControls.js";
// GLTFLoader to load .gltf files
import { GLTFLoader } from "https://cdn.skypack.dev/three@0.129.0/examples/jsm/loaders/GLTFLoader.js";

// ----- Scene & Camera -----
const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(35, window.innerWidth / window.innerHeight, 1, 1000);
camera.position.set(-0.7, 1.69, 5); // slightly back to see the object

// ----- 3D Object -----
let object;

// ----- Object Selection -----
const objToRender = 'eye'; // your model folder

// ----- Loader -----
const loader = new GLTFLoader();
loader.load(
  `./models/${objToRender}/scene.gltf`,
  function (gltf) {
    object = gltf.scene;

    // Set initial position, rotation, scale
    object.position.set(0, 0, 0);
    object.rotation.set(0, 0, 0); // reset rotation
    object.scale.set(1, 1, 1);

    scene.add(object);
    console.log('3D object loaded successfully');
  },
  function (xhr) {
    console.log((xhr.loaded / xhr.total * 100) + '% loaded');
  },
  function (error) {
    console.error('Error loading 3D object:', error);
  }
);

// ----- Renderer -----
const renderer = new THREE.WebGLRenderer({ alpha: true });
renderer.setSize(window.innerWidth, window.innerHeight);
document.getElementById("container3D").appendChild(renderer.domElement);

// ----- Lights -----
const topLight = new THREE.DirectionalLight(0xffffff, 1);
topLight.position.set(500, 10, 500);
topLight.castShadow = true;
scene.add(topLight);

const ambientLight = new THREE.AmbientLight(0x333333, 1);
scene.add(ambientLight);

// ----- Animate Loop -----
function animate() {
  requestAnimationFrame(animate);

  if (object && objToRender === "eye") {
    // Auto-rotation around Y axis only
    object.rotation.y += 0.01; // rotate continuously
    object.rotation.x = 0;     // no mouse influence
  }

  renderer.render(scene, camera);
}
animate();

// ----- Window Resize -----
window.addEventListener("resize", () => {
  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();
  renderer.setSize(window.innerWidth, window.innerHeight);
});
