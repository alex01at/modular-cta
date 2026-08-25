# Changelog

All notable changes to the `modular-cta` plugin will be documented in this file.
## [1.1.2] - 2026-08-25
- Add missing letter in file
## [1.1.1] - 2026-08-25
- Fixed: Resolved duplicate Grav version constraints in dependencies
## [1.1.0] - 2026-08-24

### Added
- **Multilingual Support (i18n):** Added English (`en`) and German (`de`) localization via `languages.yaml` for both Admin UI and blueprint descriptions.
- **New Layout Options:** Added 2 new layouts (3 layouts total):
  - `split`: Clean two-column split layout (Text on left, buttons on right).
  - `centered`: Focused, centered headline and button structure.
  - `hero_card`: Distinctive boxed card with accent border, subtle shadow elevation, and padding.
- **Custom Color Pickers:** Added color picker fields in the blueprint to allow granular customization of:
  - Section Background (`bg_color`)
  - Title & Subtitle (`text_color`)
  - Body Text (`body_color`)
  - Button Background (`btn_bg_color`)
  - Button Text (`btn_text_color`)
  - Button Hover Background (`btn_hover_bg_color`)
  - Button Hover Text (`btn_hover_text_color`)
- **Secondary Button:** Added support for a secondary action button with distinct outline styling.
- **Target Blank Option:** Toggle to open CTA button links in a new tab with proper security attributes (`rel="noopener noreferrer"`).
- **CSS Custom Properties Integration:** Twig automatically outputs inline variables (`--mcta-*`) when custom colors are selected.

### Changed
- Refactored `templates/modular/cta.html.twig` and `css/modular-cta.css` for enhanced modularity and responsiveness.
- Improved Blueprint form architecture with organized tabs (*CTA Content* and *Layout & Colors*).

---

## [1.0.0] - 2026-08-24

### Added
- Initial release.
- Modular Call to Action section page template for Grav.
- Admin blueprint with basic color presets (`primary`, `dark`, `light`).
- Responsive base styling with built-in toggle.
