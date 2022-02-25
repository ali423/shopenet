<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>https://shopenet.ir/</loc>
        <lastmod>2022-02-25T08:06:54+00:00</lastmod>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>https://shopenet.ir/login</loc>
        <lastmod>2022-02-25T08:06:54+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>https://shopenet.ir/templates/list</loc>
        <lastmod>2022-02-25T08:06:54+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>https://shopenet.ir/plan</loc>
        <lastmod>2022-02-25T08:06:54+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>https://shopenet.ir/template-custom</loc>
        <lastmod>2022-02-25T08:06:54+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>https://shopenet.ir/contactus</loc>
        <lastmod>2022-02-25T08:06:54+00:00</lastmod>
        <priority>0.80</priority>
    </url>

    @foreach ($templates as $template)
        <url>
            <loc>{{ url('/') }}/template/{{ $template->id }}</loc>
            <lastmod>{{ $template->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>
