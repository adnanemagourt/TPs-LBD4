<?xml version="1.0" encoding="UTF-8"?>
<xsl:transform version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">
        <html>

        <body>

            <style>
                body {
                    display: flex;
                    flex-wrap: wrap;
                }

                .cd {
                    display: flex;
                    flex-direction: column;
                    flex-wrap: wrap;
                    width: 29%;
                    border: solid 1px black;
                    border-radius: 10px;
                    padding: 10px;
                    margin: 1%;
                }

                .cd div {
                    display: flex;
                }
            </style>

            <a href="./">Go back</a>

            <xsl:for-each select="breakfast_menu/food">
                <!-- <xsl:sort select="YEAR" order="descending"></xsl:sort>
                <xsl:if test="PRICE &lt; 10"> -->
                <div class="cd">
                    <div>
                        <h3><xsl:value-of select="name" />,
                            <xsl:value-of select="price" />
                        </h3>
                    </div>
                    <div>
                        <p>Calories: <xsl:value-of select="calories" />
                        </p>

                    </div>
                    <div>
                        <p>Description: <xsl:value-of select="description" />
                        </p>
                    </div>
                </div>
            </xsl:for-each>
        </body>

        </html>
    </xsl:template>


</xsl:transform>