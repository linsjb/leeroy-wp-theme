/*
 * Tracking scripts for Google Tag Manager etc.
 * This file is not include in the bundle-build.
 * Mainly because those scripts need's to be loaded before the content, and the bundle is loaded after the DOM has loaded.
 */
function bookDemoFormCallback(obj) {
  if ("complete" == obj.status) {
    console.log("Event triggered: " + obj.data.gtm_trigger);

    window.dataLayer.push({
      event: obj.data.gtm_trigger,
    });
  }
}

(function (w, d, s, l, i) {
  w[l] = w[l] || [];
  w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
  var f = d.getElementsByTagName(s)[0],
    j = d.createElement(s),
    dl = l != "dataLayer" ? "&l=" + l : "";
  j.async = true;
  j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
  f.parentNode.insertBefore(j, f);
})(window, document, "script", "dataLayer", "GTM-WCSNWKS");
