# Twelve Scents — embed on Zoho Commerce

Two files:
- **index.html** — the full, self-contained app (all fonts/images/runtime inlined,
  plus a helper that reports its height to the parent page). This is what you HOST.
- **commerce-embed-snippet.html** — the small block you PASTE into a Commerce page.

## 1. Host index.html (pick one, all free)
- **Netlify Drop** (easiest): go to app.netlify.com/drop and drag in a FOLDER that
  contains index.html. You get a URL like https://your-name.netlify.app/ .
- **Cloudflare Pages** or **GitHub Pages**: upload index.html to a repo/project;
  serve it at the project root.
- **S3 / any static bucket**: upload index.html, enable static hosting, copy the URL.

Because the file is named index.html, the site root URL serves it directly
(e.g. https://your-name.netlify.app/ ). Confirm it loads in a browser first.

## 2. Embed it on your store
1. In Zoho Commerce, close Settings -> click **Storefront** (left sidebar) -> **Pages**.
2. Add a new page (e.g. "Twelve Scents").
3. Add a **Custom HTML** element to the page.
4. Paste the contents of **commerce-embed-snippet.html**, and replace
   `YOUR-HOSTED-URL` with your hosted URL (keep the trailing slash).
5. Save, then **Storefront -> (⋯ next to Visit Store) -> Publish Store**.

## Notes
- The iframe auto-grows to the app's height, so there's no inner scrollbar and the
  page scrolls as one. When the app's own menu navigates, the parent scrolls to the
  top of the embed automatically.
- Your store's header/footer still wrap the page (that's expected for an embed).
- If you ever edit the app, re-host the updated index.html — the snippet stays the same.
