<script src="js/three.js"></script>
<script src="js/GLTFLoader.js"></script>
<script src="js/OrbitControls.js"></script>

<div class="testMain">
  <h1>Welcome</h1>
<script>
let scene, camera, renderer;

function init(){
  scene = new THREE.Scene();
  scene.background = new THREE.Color(0x0099d8);
  renderer = new THREE.WebGLRenderer({antialias:true});
  renderer.setPixelRatio( window.devicePixelRatio );


  container = document.getElementById('container');
  renderer.setSize(window.innerWidth, window.innerHeight);
  document.body.appendChild(renderer.domElement);


  camera = new THREE.PerspectiveCamera(40, window.innerWidth/window.innerHeight,1,5000);

  controls = new THREE.OrbitControls( camera, renderer.domElement );
  
  camera.rotation.y = 45/180*Math.PI;
  camera.position.x = 800;
  camera.position.y = 1000;
  camera.position.z = 10;

  controls.update();


  hlight = new THREE.AmbientLight (0x404040,2);
  scene.add(hlight);

  directionLight = new THREE.DirectionalLight(0xffffff, 2);
  directionLight.position.set(0,1,0);
  directionLight.castShadow = true;
  scene.add(directionLight);

  light = new THREE.PointLight(0xc4c4c4,1);
  light.position.set(0,300,500);
  scene.add(light);

  light2 = new THREE.PointLight(0xc4c4c4,1);
  light.position.set(0,100,-500);
  scene.add(light2);

  light3 = new THREE.PointLight(0xc4c4c4,1);
  light.position.set(-500,300,0);
  scene.add(light3);

  light4 = new THREE.PointLight(0xc4c4c4,1);
  light.position.set(0,300,500);
  scene.add(light4);


  

  let loader = new THREE.GLTFLoader();
  loader.load('./imgs/3d/test3.glb', function(gltf){
      car = gltf.scene.children[0];
      car.scale.set(1000,1000,1000);
      scene.add(gltf.scene);
      animate();
  });
}

let resized = false

// resize event listener
window.addEventListener('resize', function() {
    resized = true
})

function animate(time){
  time *= 0.001

    if (resized) resize()
  requestAnimationFrame(animate);
  controls.update();
  renderer.render(scene,camera);
}

function resize() {
    resized = false

    // update the size
    renderer.setSize(window.innerWidth, window.innerHeight)

    // update the camera
    const canvas = renderer.domElement
    camera.aspect = canvas.clientWidth/canvas.clientHeight
    camera.updateProjectionMatrix()
}
init();

</script>

<div id="container" width="300" height="300"> 
  An alternative text describing what your canvas displays. 
</div> 
</div>