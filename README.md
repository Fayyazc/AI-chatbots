# WhatsApp Click-to-Chat Button & Overlay Plugin

A production-ready, feature-packed WhatsApp chat plugin overlay for **WordPress**, **WooCommerce**, and **Universal Web Applications**. Displays a floating WhatsApp button across your entire website, product pages, and cart page.

---

## 🌟 Plugin Features

- **Entire Website Overlay**: Fixed floating WhatsApp button available across all pages with pulse animation and badge notification.
- **WooCommerce Page Context Auto-Detection**:
  - **Single Product Pages**: Automatically detects product title & price and pre-fills WhatsApp inquiry messages (`"Hi! I am interested in [Product Name] ($299.00)..."`).
  - **Cart Page**: Automatically detects cart total and pre-fills checkout support inquiry messages (`"Hi! I need help completing my order checkout ($299.00)..."`).
  - **Homepage / General Pages**: Default warm welcome greeting.
- **WP Admin Configuration Screen**: Easily update WhatsApp phone number, agent name, agent role, default message, and position (Bottom Right / Bottom Left).
- **Universal JS/CSS Library**: Can also be embedded into any non-WordPress site (Shopify, Webflow, custom HTML) with 1 line of script code.

---

## 🛠️ WordPress / WooCommerce Installation

1. Download or copy the plugin folder `whatsapp-click-to-chat` to your WordPress site under `/wp-content/plugins/`.
2. Go to **WordPress Admin Dashboard > Plugins > Installed Plugins**.
3. Locate **WhatsApp Click-to-Chat Button & Overlay** and click **Activate**.
4. Navigate to **Settings > WhatsApp Chat** to configure your WhatsApp phone number and support team details.

---

## 🌐 Universal Web (HTML / JS / Shopify) Installation

If you are using this plugin on a non-WordPress site (e.g. custom HTML, React, Shopify, Webflow), include the plugin files directly in your `<head>` or before `</body>`:

```html
<!-- Load Plugin Stylesheet -->
<link rel="stylesheet" href="dist/whatsapp-chat-plugin.css">

<!-- Option A: Automatic Initialization via Data-Attributes -->
<script 
  src="dist/whatsapp-chat-plugin.js" 
  data-whatsapp-plugin 
  data-phone="+923365037770"
  data-agent-name="Customer Support"
  data-agent-role="Online | Replies in 2 mins"
  data-position="bottom-right"
  data-default-msg="Hello! I have a question about your products.">
</script>

<!-- Option B: Programmatic JavaScript Initializer -->
<script src="dist/whatsapp-chat-plugin.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    new WhatsAppChatPlugin({
      phoneNumber: "+923365037770",
      agentName: "Aura Support",
      agentRole: "Live Customer Support",
      position: "bottom-right",
      defaultMessage: "Hello! I am reaching out from your website.",
      welcomeMessage: "Hi there! 👋 How can we help you today?"
    });
  });
</script>
```

---

## 📁 Plugin Repository Structure

```
├── whatsapp-click-to-chat.php    # Main WordPress Plugin Bootstrap
├── includes/
│   ├── admin-settings.php        # WP Admin Settings Menu & Options Page
│   └── class-frontend.php        # Script Enqueuer & WooCommerce Context Detection
├── dist/
│   ├── whatsapp-chat-plugin.js   # Universal JS Plugin Library
│   └── whatsapp-chat-plugin.css  # Encapsulated Plugin Stylesheet
└── README.md                     # Documentation
```

---

## 📄 License

Distributed under the GPLv2 License.
