<section class="py-4">

  <style>
    /* Responsive background hero for Christmas page - width-based sources + DPR-aware fallback */
    .christmas-hero{background-position:center; background-size:cover; background-repeat:no-repeat}
    .christmas-hero{min-height:260px; display:flex; align-items:center}
    @media (min-width:768px){ .christmas-hero{min-height:320px} }
    @media (min-width:1200px){ .christmas-hero{min-height:420px} }

    /* Width-based sources */
    .christmas-hero{background-image: url('<?php echo isset($base) ? $base : '/'; ?>assets/images/christmas-eve-800.jpg');}
    @media (max-width:600px){
      .christmas-hero{background-image: url('<?php echo isset($base) ? $base : '/'; ?>assets/images/christmas-eve-480.jpg');}
    }
    @media (min-width:1200px){
      .christmas-hero{background-image: url('<?php echo isset($base) ? $base : '/'; ?>assets/images/christmas-eve-1200.jpg');}
    }

    /* DPR-aware fallback using image-set for browsers that support it, only for widths under 1200px
       so large-breakpoint explicit image can be used on wide screens regardless of DPR. */
    @media (max-width:1199.98px){
      .christmas-hero{
        background-image: -webkit-image-set(url('<?php echo isset($base) ? $base : '/'; ?>assets/images/christmas-eve-480.jpg') 1x, url('<?php echo isset($base) ? $base : '/'; ?>assets/images/christmas-eve-800.jpg') 2x);
        background-image: image-set(url('<?php echo isset($base) ? $base : '/'; ?>assets/images/christmas-eve-480.jpg') 1x, url('<?php echo isset($base) ? $base : '/'; ?>assets/images/christmas-eve-800.jpg') 2x);
      }
    }
  </style>

  <div class="hero has-img christmas-hero">
    <noscript>
      <style>
        /* Fallback for users without JS: show solid brand background and keep text readable */
        .christmas-hero{background-image:none !important; background:linear-gradient(135deg, var(--brand), var(--brand)) !important; color:#fff !important}
        .christmas-hero .container{padding:3rem 1rem}
      </style>
    </noscript>
    <div class="container">
      <h1>Christmas 2025</h1>
      <p class="lead">Join us for our Christmas Eve Services on Dec 24 at 6:00 P.M. and 8:00 P.M.</p>
    </div>
  </div>
  <p>We have ministries for youth, families, seniors, music, and outreach. Reach out to learn how to get involved.</p>
  <ul>
    <li>Youth Group</li>
    <li>Food Pantry</li>
    <li>Choir & Music</li>
  </ul>
</section>