if ("serviceWorker" in navigator) {
    navigator.serviceWorker
      .register("service_worker.js", { scope: "/" })
      .then(function(reg) {
        console.log( "Service worker is started");
      })
      .catch(function(error) {
        console.log("Service worker registration failed with " + error);
      });
  } else {
    console.log("Your browser do not support Service Worker");
  }


if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/service_worker.js').then(function(reg) {
      // registration worked
      console.log('Registration succeeded');
    }).catch(function(error) {
      // registration failed
      console.log('Registration failed with ' + error);
    });
  };
  
  
  self.addEventListener("install",(event) =>{
    console.log("service worker installed")
  });
  
  self.addEventListener("activate",(event) =>{
    console.log("service worker activated");
    self.clients.claim();
  });