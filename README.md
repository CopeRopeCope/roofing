# 🚀 Uputstvo za instalaciju WordPress teme

Pratite sledeće korake kako biste uspešno postavili i aktivirali temu na svom lokalnom WordPress sajtu.

---

### 📂 Korak 1 - Pronađi folder WordPress-a
Ako koristiš **LocalWP**:
1. Otvori svoj sajt u programu.
2. Klikni na dugme **Go to Site Folder**.

Struktura foldera koju ćeš videti izgleda ovako:
```text
app/
└── public/
    ├── wp-admin/
    ├── wp-content/
    └── wp-includes/
```
📍 **Putanja koja nama treba je:** `app/public/wp-content/themes/`

---

### 📁 Korak 2 - Napravi temu
U folderu `themes` napravi novi folder pod nazivom: **`als-roofing`**

Sada struktura izgleda ovako:
```text
wp-content/
└── themes/
    └── als-roofing/
```

---

### 📄 Korak 3 - Prekopiraj naše fajlove
Prebaci sve razvojne fajlove u novokreirani folder. Krajnji rezultat treba da izgleda ovako:

```text
als-roofing/
├── style.css
├── functions.php
├── header.php
├── footer.php
├── front-page.php
├── index.php
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
├── inc/
└── template-parts/
```

---

### 🖼️ Korak 4 - Screenshot teme
WordPress koristi posebnu sliku za prikaz izgleda teme u administraciji.

1. Napravi fajl pod nazivom: **`screenshot.png`**
2. Dimenzije slike moraju biti: **1200 x 900 px**

> 💡 *Napomena: Za sada to može biti potpuno bela slika ili običan placeholder. Kasnije ćemo napraviti profesionalan preview.*

---

### 🔌 Korak 5 - Aktivacija
1. Otvori WordPress administraciju (Dashboard).
2. Idi na: **Appearance** ➔ **Themes**.
3. Na listi bi trebalo da vidiš temu pod imenom **ALS Roofing**.

⚠️ **Važno:** Ako umesto teme vidiš natpis **Broken Theme**, to znači da neki od obaveznih fajlova nedostaje.

---

### 🚀 Korak 6 - Aktiviraj
* Pređi mišem preko teme i klikni na dugme **Activate**.

#### ❌ Ako dobiješ grešku, najčešći uzroci su:
1. **`The stylesheet is missing.`** — Fajl `style.css` se ne nalazi direktno u root folderu teme.
2. **`Template is missing.`** — Najčešće nedostaje obavezni fajl `index.php`.
3. **`White Screen (Beli ekran)`** — Došlo je do PHP Fatal Error greške u kodu (proveri `functions.php`).

---

### ⚙️ Korak 7 - Podešavanje Početne Stranice
Da bi WordPress prikazivao tvoj custom dizajn umesto blog objava, uradi sledeće:

1. U administraciji idi na: **Settings** ➔ **Reading**.
2. Pod opcijom **Your homepage displays** izaberi **A static page**.
3. Napravi stranicu pod nazivom **Početna** (ukoliko već nisi) i postavi je u padajućem meniju kao **Homepage**.

---

### 🌐 Korak 8 - Testiranje
Otvori svoj pretraživač i poseti adresu tvog lokalnog sajta:
* `http://localhost` ili `https://ime-sajta.local`
