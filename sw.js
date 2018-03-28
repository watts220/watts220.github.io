self.addEventListener('install', e => {
  const timeStamp = Date.now();
  e.waitUntil(
    caches.open('geekqlick-cache').then(cache => {
      return cache.addAll([
        `/`,
        `/index.html?timestamp=${timeStamp}`,
        `/about.html?timestamp=${timeStamp}`,
        `/contact.html?timestamp=${timeStamp}`,
        `/portfolio.html?timestamp=${timeStamp}`,
        `/services.html?timestamp=${timeStamp}`,
        `/css/main.css?timestamp=${timeStamp}`,
        `/js/main.js?timestamp=${timeStamp}`
      ])
          .then(() => self.skipWaiting());
    })
  );
});

self.addEventListener('activate', event => {
  event.waitUntil(self.clients.claim());
});

self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request, {ignoreSearch: true}).then(response => {
      return response || fetch(event.request);
    })
  );
});