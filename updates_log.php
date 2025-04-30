<?php
    // date_default_timezone_set('Europe/London');
    $lastUpdated     = date('Y-m-d');
    $lastUpdatedTime = date("h:i:sa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BJJ Plymouth - Updates Log</title>
    <style>
        :root {
            --primary: #343434;
            --accent: #f19760;
            --light: #ecf0f1;
            --dark: #1a1a1a;
            --success: #4CAF50;
            --warning: #FFC107;
            --info: #2196F3;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        header {
            background-color: var(--primary);
            color: white;
            padding: 20px 0;
            text-align: center;
            margin-bottom: 30px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        h1 {
            margin: 0;
            font-size: 2.5rem;
        }

        .last-updated {
            font-style: italic;
            opacity: 0.8;
        }

        .tabs {
            display: flex;
            /* margin-bottom: 20px; */
            border-bottom: 1px solid #ddd;
        }

        .tab {
            padding: 10px 20px;
            cursor: pointer;
            background-color: #f1f1f1;
            border: 1px solid #ddd;
            border-bottom: none;
            margin-right: 5px;
            border-radius: 5px 5px 0 0;
            transition: all 0.3s ease;
        }

        .tab.active {
            background-color: white;
            border-bottom: 1px solid white;
            margin-bottom: -1px;
            font-weight: bold;
            color: var(--accent);
        }

        .tab:hover:not(.active) {
            background-color: #e9e9e9;
        }

        .tab-content {
            display: none;
            padding: 20px;
            background-color: white;
            border: 1px solid #ddd;
            border-top: none;
            border-radius: 0 0 5px 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .tab-content.active {
            display: block;
        }

        .change-item {
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px dashed #eee;
        }

        .change-item:last-child {
            border-bottom: none;
        }

        .change-category {
            font-weight: bold;
            color: var(--primary);
            margin-bottom: 5px;
        }

        .change-description {
            margin-left: 20px;
        }

        .badge {
            display: inline-block;
            padding: 3px 8px;
            border-radius: 3px;
            font-size: 0.8rem;
            font-weight: bold;
            margin-right: 5px;
        }

        .badge-seo {
            background-color: var(--success);
            color: white;
        }

        .badge-tech {
            background-color: var(--info);
            color: white;
        }

        .badge-ux {
            background-color: var(--accent);
            color: white;
        }

        .badge-future {
            background-color: var(--warning);
            color: var(--dark);
        }

        .status {
            float: right;
            font-style: italic;
            color: #666;
        }

        @media (max-width: 768px) {
            .tabs {
                flex-direction: column;
            }

            .tab {
                border-radius: 0;
                margin-right: 0;
                border-bottom: 1px solid #ddd;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>BJJ Plymouth - Updates Log</h1>
            <div class="last-updated">Last Updated:
                 <?php echo $lastUpdated . " - " . $lastUpdatedTime; ?></div>
        </div>
    </header>

    <div class="container">
        <div class="tabs">
            <div class="tab active" onclick="openTab(event, 'implemented')">Implemented Changes</div>
            <div class="tab" onclick="openTab(event, 'future')">Future Improvements</div>
            <div class="tab" onclick="openTab(event, 'next-steps')">Next Steps</div>
        </div>

        <div id="implemented" class="tab-content active">
            <h2>Implemented Changes</h2>

            <div class="change-item">
                <div class="change-category">
                    <span class="badge badge-seo">SEO</span> Indexing & Crawlability
                </div>
                <div class="change-description">
                    - Added triple protection against indexing (meta tag, HTTP header, 404 status)<br>
                    - Added canonical URL pointing to homepage<br>
                    - Implemented structured data (JSON-LD) for error pages
                </div>
            </div>

            <div class="change-item">
                <div class="change-category">
                    <span class="badge badge-tech">TECH</span> Technical Improvements
                </div>
                <div class="change-description">
                    - Secure config file loading with file_exists() check<br>
                    - Better mobile responsiveness using clamp()<br>
                    - CSS animations for better UX<br>
                    - Improved link organization
                </div>
            </div>

            <div class="change-item">
                <div class="change-category">
                    <span class="badge badge-ux">UX</span> Accessibility & User Experience
                </div>
                <div class="change-description">
                    - Added aria-hidden for decorative emoji<br>
                    - Better heading hierarchy<br>
                    - More helpful navigation links<br>
                    - Improved responsive design
                </div>
            </div>
        </div>

        <div id="future" class="tab-content">
            <h2>Future Planned Improvements</h2>

            <div class="change-item">
                <div class="change-category">
                    <span class="badge badge-seo">SEO</span> Indexing & Crawlability
                </div>
                <div class="change-description">
                    - Monitor 404 errors in Google Search Console<br>
                    - Implement 301 redirects for important broken links<br>
                    - Review sitemap.xml for invalid URLs
                </div>
            </div>

            <div class="change-item">
                <div class="change-category">
                    <span class="badge badge-tech">TECH</span> Performance Optimizations
                </div>
                <div class="change-description">
                    - Preload critical CSS<br>
                    - Implement lazy-loading for images<br>
                    - Minify and compress assets
                </div>
            </div>

            <div class="change-item">
                <div class="change-category">
                    <span class="badge badge-ux">UX</span> User Experience
                </div>
                <div class="change-description">
                    - Add search functionality<br>
                    - Implement "Recent Posts" section<br>
                    - Track 404s via Google Analytics
                </div>
            </div>

            <div class="change-item">
                <div class="change-category">
                    <span class="badge badge-future">SECURITY</span> Enhancements
                </div>
                <div class="change-description">
                    - Implement rate-limiting<br>
                    - Add honeypot trap for bots
                </div>
            </div>
        </div>

        <div id="next-steps" class="tab-content">
            <h2>Next Steps</h2>

            <div class="change-item">
                <div class="change-description">
                    1. Test the 404 page across multiple devices and browsers<br>
                    2. Verify in Google Search Console that it's not being indexed<br>
                    3. Set up redirects for high-traffic broken URLs<br>
                    4. Schedule monthly SEO audits<br>
                    5. Implement performance monitoring
                </div>
                <div class="status">Status: Pending</div>
            </div>
        </div>
    </div>

    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tablinks;

            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].className = tabcontent[i].className.replace(" active", "");
            }

            tablinks = document.getElementsByClassName("tab");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            document.getElementById(tabName).className += " active";
            evt.currentTarget.className += " active";
        }
    </script>
</body>
</html>