document.addEventListener("contextmenu", function (e) {
  e.preventDefault();
});

// Menonaktifkan shortcut keyboard developer tools
document.onkeydown = function (e) {
  // F12 - Developer Tools
  if (e.keyCode == 123) return false;

  // Ctrl+Shift+I - Developer Tools
  if (e.ctrlKey && e.shiftKey && e.keyCode == "I".charCodeAt(0)) return false;

  // Ctrl+Shift+C - Inspect Element
  if (e.ctrlKey && e.shiftKey && e.keyCode == "C".charCodeAt(0)) return false;

  // Ctrl+Shift+J - Console
  if (e.ctrlKey && e.shiftKey && e.keyCode == "J".charCodeAt(0)) return false;

  // Ctrl+U - View Source
  if (e.ctrlKey && e.keyCode == "U".charCodeAt(0)) return false;
};

// Optimized JavaScript Protection
(function () {
  "use strict";

  // Disable context menu with better performance
  document.addEventListener("contextmenu", (e) => e.preventDefault(), {
    passive: false,
  });

  // Optimized key combinations blocking
  const blockedKeys = new Map([
    [123, "F12"], // F12
    ["KeyI", "DevTools"], // Ctrl+Shift+I
    ["KeyC", "Inspect"], // Ctrl+Shift+C
    ["KeyJ", "Console"], // Ctrl+Shift+J
    ["KeyU", "ViewSource"], // Ctrl+U
    ["KeyS", "SavePage"], // Ctrl+S
    ["KeyA", "SelectAll"], // Ctrl+A (optional)
    ["KeyP", "Print"], // Ctrl+P (optional)
  ]);

  document.addEventListener(
    "keydown",
    (e) => {
      const key = e.code || e.keyCode;

      // Check F12
      if (e.keyCode === 123) {
        e.preventDefault();
        return false;
      }

      // Check Ctrl combinations
      if (e.ctrlKey) {
        if (
          (e.shiftKey &&
            (key === "KeyI" || key === "KeyC" || key === "KeyJ")) ||
          key === "KeyU" ||
          key === "KeyS" ||
          key === "KeyP"
        ) {
          e.preventDefault();
          return false;
        }
      }

      // Optional: Block Ctrl+A (select all)
      // if (e.ctrlKey && key === 'KeyA') {
      //     e.preventDefault();
      //     return false;
      // }
    },
    { passive: false }
  );

  // Disable drag and drop
  document.addEventListener("dragstart", (e) => e.preventDefault());
  document.addEventListener("drop", (e) => e.preventDefault());

  // Clear console periodically (aggressive approach)
  const clearConsole = () => {
    if (typeof console !== "undefined") {
      try {
        console.clear();
      } catch (e) {}
    }
  };

  // Optional: Clear console every 3 seconds
  // setInterval(clearConsole, 3000);

  // Detect DevTools (basic detection)
  let devtools = {
    open: false,
    orientation: null,
  };

  const threshold = 160;

  const checkDevTools = () => {
    const widthThreshold = window.outerWidth - window.innerWidth > threshold;
    const heightThreshold = window.outerHeight - window.innerHeight > threshold;

    if (
      !(heightThreshold && widthThreshold) &&
      ((window.Firebug &&
        window.Firebug.chrome &&
        window.Firebug.chrome.isInitialized) ||
        widthThreshold ||
        heightThreshold)
    ) {
      if (!devtools.open) {
        devtools.open = true;
        // Optional: Redirect or show warning
        // window.location.href = 'about:blank';
        console.warn("Developer tools detected!");
      }
    } else {
      devtools.open = false;
    }
  };

  // Check every 500ms
  setInterval(checkDevTools, 500);

  // Disable text selection with mouse events
  document.addEventListener("selectstart", (e) => e.preventDefault());
  document.addEventListener("mousedown", (e) => {
    if (e.detail > 1) {
      // Disable multiple clicks
      e.preventDefault();
    }
  });

  // Disable printing
  window.addEventListener("beforeprint", (e) => {
    e.preventDefault();
    return false;
  });

  // Optional: Blur page when focus is lost (anti-screenshot)
  // document.addEventListener('visibilitychange', () => {
  //     if (document.hidden) {
  //         document.body.style.filter = 'blur(5px)';
  //     } else {
  //         document.body.style.filter = 'none';
  //     }
  // });
})();
