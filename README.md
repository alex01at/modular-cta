# Modular CTA Plugin for Grav CMS

The **Modular CTA** plugin adds a flexible, multilingual Call-to-Action (CTA) section template to [Grav CMS](https://getgrav.org). It enables editors to create high-converting CTA sections within modular pages with zero coding.

---

## Features

- 🌍 **Fully Multilingual (DE / EN):** Seamless Admin translation out of the box.
- 📐 **3 Versatile Layouts:**
  - `Split (2-Column)`: Text on the left, buttons aligned to the right.
  - `Centered`: Centered text and buttons for focused announcements.
  - `Hero Card`: Elevated boxed card with custom border styling.
- 🎨 **Full Color Customization:** Select from predefined presets (`Primary`, `Dark`, `Light`) or define exact hex colors for backgrounds, headings, body text, and buttons (normal & hover).
- 🔘 **Primary & Secondary Buttons:** Optional second button and `target="_blank"` toggle.
- ⚡ **Lightweight & Clean CSS:** Built with CSS Custom Properties and zero third-party dependencies.

---

## Installation

### Manual Installation
1. Download or clone this repository into your Grav plugin folder:
   ```bash
   user/plugins/modular-cta
   ```
2. Clear Grav cache:
   ```bash
   bin/grav clear-cache
   ```

---

## Configuration

Global settings can be managed via the Grav Admin Panel under **Plugins > Modular CTA** or in `user/config/plugins/modular-cta.yaml`:

```yaml
enabled: true
built_in_css: true # Set to false if you style CTA sections in your theme CSS
```

---

## Usage in Pages

### 1. Via Grav Admin Panel
1. Go to **Pages** and open any Modular page (e.g. `_home`).
2. Click **Add Modular Page**.
3. Choose the Page Template: **Call to Action (CTA)** (`cta`).
4. Configure your content, choose your layout, and pick colors under the **Layout & Colors** tab.

### 2. Via Markdown File (`cta.md`)

Create a folder in your modular page structure, e.g., `user/pages/01.home/_cta/cta.md`:

```yaml
---
title: Get Started
cta_title: Ready to Launch Your Next Project?
cta_subtitle: Get in touch with our team today for a free consultation.
button_text: Contact Us
button_url: /contact
button_secondary_text: Documentation
button_secondary_url: https://docs.example.com
button_target_blank: false
cta_layout: hero_card
cta_preset: custom
bg_color: '#0f172a'
text_color: '#ffffff'
body_color: '#94a3b8'
btn_bg_color: '#38bdf8'
btn_text_color: '#0f172a'
btn_hover_bg_color: '#0284c7'
btn_hover_text_color: '#ffffff'
---

We help you plan, build, and deploy high-performance web applications tailored to your exact needs.
```

---

## License

This plugin is open-source software licensed under the [MIT License](LICENSE).
