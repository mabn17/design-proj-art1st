<?php

namespace Anax\View;

/**
 * Style chooser.
 */

// Show incoming variables and view helper functions
//echo showEnvironment(get_defined_vars(), get_defined_functions());

function getDesc($key)
{
    if (strpos($key, 'light') !== false) {
        return 'Ett ljust tema';
    }

    return 'Ett mörkt tema';
}

?><main>
    <h1>Stylechooser</h1>
    <p>Här kan du välja mellan olika teman.</p>
    <a href="./" class="text-secondary">Tillbaka Till Hem</a>
    <form class="stylechooser" method="post" action="<?= url("style/update") ?>">
            <p>
                <label for="stylechooser">Select the style to activate it:<br>
                    <select name="stylechooser" onchange="form.submit();">
                        <option value="none" disabled >Inget tema har valts, använder dark.</option>
                        <?php foreach ($styles as $key => $value) :
                        $selected = $key === $activeStyle ? "selected=\"selected\"" : null;
                        ?>
                        <option <?= $selected ?> value="<?= $key ?>"><?= "[ $key ] - " . getDesc($key) ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </label>
            </p>
            <?php if ($activeStyle) : ?>
                <p><b>Akriv Tema: </b><?= $activeStyle ?></p>
            <?php endif; ?>
    </form>