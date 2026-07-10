<?php
// Check if this can redirect to the Laravel project
$laravelPaths = [
  __DIR__ . '/public/index.php',
  __DIR__ . '/../Pengembangan Project PENGEMBANGAN APLIKASI WEB MANAJEMEN KARYAWAN BERBASIS LARAVEL DENGAN FITUR IMPORT EXCEL ABSENSI PENILAIAN KINERJA DAN PERHITUNGAN GAJI/index.php'
];
foreach ($laravelPaths as $p) {
  if (file_exists($p)) { include $p; exit; }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>HRIS Project — UNSADA</title>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css">
<script src="https://cdn.tailwindcss.com"></script>
<style>
body{background:#020015;color:#e2e8f0;font-family:'Plus Jakarta Sans',sans-serif}
canvas#p{position:fixed;top:0;left:0;width:100%;height:100%;z-index:0;pointer-events:none}
.glass{background:rgba(255,255,255,0.03);backdrop-filter:blur(24px);border:1px solid rgba(255,255,255,0.06);border-radius:24px;transition:all .5s}
.glass:hover{border-color:rgba(255,255,255,0.15);transform:translateY(-4px);box-shadow:0 24px 80px -12px rgba(167,139,250,0.15)}
</style>
</head>
<body class="bg-[#020015]">
<canvas id="p"></canvas>
<div class="relative z-10 min-h-screen flex flex-col items-center justify-center px-6 py-20">
  <div class="max-w-3xl mx-auto text-center">
    <div class="w-16 h-16 mx-auto mb-6 rounded-2xl bg-gradient-to-br from-blue-600 to-cyan-500 flex items-center justify-center text-white text-2xl shadow-lg shadow-blue-500/20">
      <i class="fa-solid fa-users-gear"></i>
    </div>
    <div class="flex items-center justify-center gap-2 text-[10px] font-semibold tracking-widest text-blue-400 uppercase mb-4">
      <span class="w-8 h-[1px] bg-blue-400/50"></span> HRIS &bull; Laravel &bull; Capstone
    </div>
    <h1 class="text-4xl md:text-5xl font-bold font-display text-white mb-4 leading-tight">
      Pengembangan Aplikasi Web<br>
      <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-cyan-300 to-teal-300">Manajemen Karyawan</span>
    </h1>
    <p class="text-sm text-white/40 max-w-xl mx-auto mb-8 leading-relaxed">
      HRIS berbasis Laravel dengan fitur Import Excel, Absensi, Penilaian Kinerja, dan Perhitungan Gaji.
      Capstone Project — Arsitektur Enterprise TOGAF ADM.
    </p>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-3 mb-10">
      <?php
      $features = [
        ['Import Excel','fa-file-import','from-blue-500 to-cyan-500'],
        ['Absensi','fa-fingerprint','from-emerald-500 to-teal-500'],
        ['Penilaian','fa-star','from-amber-500 to-orange-500'],
        ['Penggajian','fa-money-bill-wave','from-rose-500 to-pink-500']
      ];
      foreach ($features as $f):
      ?>
      <div class="glass p-4 text-center">
        <div class="w-10 h-10 mx-auto mb-2 rounded-xl bg-gradient-to-br <?=$f[2]?> flex items-center justify-center text-white text-sm">
          <i class="fa-solid <?=$f[1]?>"></i>
        </div>
        <p class="text-[11px] font-bold text-white/80"><?=$f[0]?></p>
      </div>
      <?php endforeach; ?>
    </div>

    <a href="http://pengembangan-project-hris.test/" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 rounded-2xl bg-gradient-to-r from-blue-600 to-cyan-500 text-white text-sm font-bold shadow-lg hover:shadow-blue-500/40 transition-all">
      <i class="fa-solid fa-arrow-up-right-from-square"></i> Buka Project
    </a>
  </div>

  <div class="glass p-5 mt-10 w-full max-w-2xl">
    <div class="flex flex-wrap items-center gap-3 text-[10px] text-white/30">
      <span><i class="fa-brands fa-laravel mr-1"></i> Laravel 11</span>
      <span><i class="fa-brands fa-php mr-1"></i> PHP <?=PHP_VERSION?></span>
      <span><i class="fa-solid fa-database mr-1"></i> MySQL</span>
      <span class="ml-auto"><i class="fa-regular fa-clock mr-1"></i> <?=date('Y-m-d')?></span>
    </div>
  </div>
</div>
<script>
(function(){const c=document.getElementById('p'),x=c.getContext('2d');let w,h,ps=[];
function r(){w=c.width=innerWidth;h=c.height=innerHeight}
addEventListener('resize',r);r();
class P{constructor(){this.x=Math.random()*w;this.y=Math.random()*h;this.s=Math.random()*1.5+.5;this.vx=(Math.random()-.5)*.3;this.vy=(Math.random()-.5)*.3;this.o=Math.random()*.5+.1}
update(){this.x+=this.vx;this.y+=this.vy;if(this.x<0||this.x>w||this.y<0||this.y>h){this.x=Math.random()*w;this.y=Math.random()*h}}
draw(){x.beginPath();x.arc(this.x,this.y,this.s,0,Math.PI*2);x.fillStyle=`rgba(59,130,246,${this.o})`;x.fill()}}
for(let i=0;i<100;i++)ps.push(new P);
(function a(){x.clearRect(0,0,w,h);ps.forEach(p=>{p.update();p.draw()});for(let i=0;i<ps.length;i++){for(let j=i+1;j<ps.length;j++){const dx=ps[i].x-ps[j].x,dy=ps[i].y-ps[j].y,d=Math.sqrt(dx*dx+dy*dy);if(d<120){x.beginPath();x.moveTo(ps[i].x,ps[i].y);x.lineTo(ps[j].x,ps[j].y);x.strokeStyle=`rgba(59,130,246,${.04*(1-d/120)})`;x.lineWidth=.5;x.stroke()}}}requestAnimationFrame(a)})()})();
</script>
</body>
</html>