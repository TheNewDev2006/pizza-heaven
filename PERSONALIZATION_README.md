# Personalized Restaurant Website Template

## Overview
This is a fully customizable restaurant website template with URL parameter support for personalization. Perfect for cold outreach campaigns where you need unique websites for different prospects.

## Cynix Inc Default Info (Fallback)
When no URL parameters are provided, the website displays:
- **Business Name:** Cynix Inc Digital Solutions
- **Email:** info.cynixinc@gmail.com
- **Phone:** +94722558244
- **Address:** 267, Jampettah Street, Colombo 13

---

## URL Parameters

### Available Parameters

| Short | Full | Description | Example |
|-------|------|-------------|---------|
| `bn` | business_name | Business/Restaurant Name | `?bn=PizzaPalace` |
| `e` | email | Contact Email | `?e=hello@pizzapalace.com` |
| `p` | phone | Phone Number | `?p=+94771234567` |
| `a` | address | Physical Address | `?a=123%20Main%20St` |
| `t` | tagline | Hero Tagline | `?t=Authentic%20Italian` |
| `logo` | logo | Logo URL (optional) | `?logo=https://...` |
| `color` | primary_color | Brand Color (hex) | `?color=%23e74c3c` |
| `w` | website | Website URL | `?w=pizzapalace.com` |
| `fb` | facebook | Facebook URL | `?fb=https://fb.com/...` |
| `tw` | twitter | Twitter URL | `?tw=https://twitter.com/...` |
| `li` | linkedin | LinkedIn URL | `?li=https://linkedin.com/...` |
| `ig` | instagram | Instagram URL | `?ig=https://instagram.com/...` |

---

## Usage Examples

### Basic Usage (All Defaults - Cynix Inc)
```
https://your-domain.com/
```

### With All Parameters
```
https://your-domain.com/?bn=ItalianBistro&e=hello@italianbistro.com&p=+94771234567&a=Colombo&t=Authentic%20Italian%20Cuisine
```

### With Logo
```
https://your-domain.com/?bn=PizzaPalace&logo=https://client-logo-url.com/logo.png&t=Best%20Pizza%20in%20Town
```

### With Custom Color
```
https://your-domain.com/?bn=ThaiKitchen&color=%2327ae60&t=Authentic%20Thai%20Flavors
```

---

## URL Parameter Builder

Use this format to create your personalized URLs:

```
https://[your-domain]/?bn=[NAME]&e=[EMAIL]&p=[PHONE]&a=[ADDRESS]&t=[TAGLINE]&logo=[LOGO_URL]
```

### Encoding Special Characters
- Replace spaces with `%20` or use `+`
- Replace `#` with `%23` in color codes
- URL encode any special characters

---

## Installation

1. Clone/deploy this Laravel project to your hosting
2. Run `composer install`
3. Run `php artisan key:generate`
4. Configure your `.env` file
5. Deploy to your hosting

---

## Customization Points

### Modified Files
- `app/Services/PersonalizationService.php` - Fallback values and parameter mapping
- `app/Http/Middleware/PersonalizationMiddleware.php` - URL param extraction
- `bootstrap/app.php` - Middleware registration
- `resources/views/frontend/includes/partials/head.blade.php` - Dynamic meta tags
- `resources/views/frontend/includes/headers/*.blade.php` - Dynamic logo/phone
- `resources/views/frontend/includes/footers/*.blade.php` - Dynamic contact info
- `resources/views/frontend/homes/*.blade.php` - Dynamic hero content

---

## Support

For technical support, contact Cynix Inc:
- **Email:** info.cynixinc@gmail.com
- **Phone:** +94722558244
- **Address:** 267, Jampettah Street, Colombo 13

---

## License

This template is provided by Cynix Inc for use in client outreach campaigns.
