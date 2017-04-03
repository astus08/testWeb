SELECT cours.ID, cours.title, cours.subTitle, cours.logoLink, logoform.className, cours.description, COUNT(articles.ID_cours) AS nbArticles
FROM cours
INNER JOIN logoform ON
    cours.id_form = logoform.ID
LEFT JOIN articles ON
    cours.ID = articles.ID_cours
GROUP BY cours.ID
ORDER BY cours.ID
LIMIT 8