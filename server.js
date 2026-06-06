const express = require('express');
const path = require('path');
const app = express();
const PORT = 3000;

// Set EJS as view engine and set views folder to root of node-app
app.set('view engine', 'ejs');
app.set('views', process.cwd());

// Ticket page route
app.get(['/tiket', '/tiket/'], (req, res) => {
    res.sendFile(path.join(process.cwd(), 'tiket', 'tiket.html'));
});

// Serve static assets from node-app
app.use('/assets', express.static(path.join(process.cwd(), 'assets')));
app.use('/PHOTO', express.static(path.join(process.cwd(), 'PHOTO')));
app.use('/index', express.static(path.join(process.cwd(), 'index')));
app.use('/tiket', express.static(path.join(process.cwd(), 'tiket')));

// Home page route (renders index/index.ejs)
app.get('/', (req, res) => {
    const wisata_kawahijen = [
        {
            title: "Melihat Keindahan kawah ijen",
            deskripsi: "Nikmati pemandangan kawah vulkanik dengan danau asam berwarna toska yang memukau.",
            img: "/PHOTO/ijen_volcano.jpg"
        },
        {
            title: "Exploring the Blue Fire",
            deskripsi: "Saksikan fenomena langka api biru yang hanya ada dua di dunia saat malam hari.",
            img: "/PHOTO/ijen_night_sky.png"
        },
        {
            title: "Experience the Sunrise",
            deskripsi: "Sambut pagi dengan pemandangan matahari terbit yang spektakuler dari puncak Ijen.",
            img: "/PHOTO/ijen_trail.png"
        },
        {
            title: "Enjoy the Night View",
            deskripsi: "Rasakan suasana malam yang magis dengan langit penuh bintang di atas kawah.",
            img: "/PHOTO/kawah_ijen_premium.png"
        }
    ];
    res.render('index/index', { wisata_kawahijen });
});

// Also handle /index paths for compatibility
app.get('/index', (req, res) => {
    res.redirect('/');
});
app.get('/index/index.php', (req, res) => {
    res.redirect('/');
});

if (require.main === module) {
    app.listen(PORT, () => {
        console.log(`Server is running at http://localhost:${PORT}`);
    });
}

module.exports = app;
