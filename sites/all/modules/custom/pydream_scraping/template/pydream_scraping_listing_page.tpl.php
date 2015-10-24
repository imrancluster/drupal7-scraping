<div id="scraping-list">
    <?php
    if ( isset($items['list']) && $items['list'] != false ) { ?>
        <table id="scrap-list">
            <thead>
            <tr>
                <th>Subject</th>
                <th>URL</th>
                <th>Field Map</th>
                <th>Language</th>
                <th>Company</th>
                <th>Category</th>
                <th>Title</th>
                <th>Schedule</th>
                <th>Created</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
        <?php foreach ( $items['list'] as $list ) { ?>
            <tr>
            <td><?php echo $list['subject']; ?></td>
            <td><?php echo $list['url']; ?></td>
            <td><?php echo $list['field_map']; ?></td>
            <td><?php echo $list['language']; ?></td>
            <td><?php echo $list['company']; ?></td>
            <td><?php echo $list['category']; ?></td>
            <td><?php echo $list['title']; ?></td>
            <td><?php echo $list['schedule']; ?></td>
            <td><?php echo $list['created']; ?></td>
            <td>
                <a href="/scraping?sid=<?php echo $list['sid']; ?>"><button id="scrap-edit">Edit</button></a>
                <a href="/scraping-manual/<?php echo $list['sid']; ?>">
                    <button class="scrap-manual" id="<?php echo $list['sid']; ?>">Scrap</button>
                    <img class="scrap-loading" src="sites/all/modules/custom/pydream_scraping/assets/images/ajax-loader.gif">
                </a>
                <a href="/scraping-delete/<?php echo $list['sid']; ?>"><button class="scrap-delete">Delete</button></a>
            </td>
            </tr>
        <?php } ?>

            </tbody>
        </table>

    <?php  } else { ?>
        <p>No data found.</p>
    <?php } ?>
</div>