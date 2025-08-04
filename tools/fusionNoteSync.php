<?php
// 🧠 CONFIG
$readmePath = './README_temp.md'; // Fichier de notes
$directories = ['models', 'controllers', 'views', 'config']; // Dossiers à scanner
$date = date('Y-m-d H:i:s');

// 📦 NOTES COLLECTÉES
$notes = "\n## 🔹 Rapport de fusion – $date\n";

foreach ($directories as $dir) {
    if (!is_dir($dir)) continue;
    $files = scandir($dir);
    
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;
        $filePath = "$dir/$file";
        $type = ucfirst($dir); // Ex: Models, Controllers...

        $notes .= "
📁 Fichier : $file
📂 Dossier : $type
📅 Date : $date
✅ Action : Analyse structurelle
🧠 Note : À compléter selon le contenu spécifique.
-------------------------------\n";
    }
}

// 💾 Écriture dans README_temp.md
file_put_contents($readmePath, $notes, FILE_APPEND);
echo "✅ Notes ajoutées au README_temp.md\n";
?>
