<?xml version="1.0" encoding="UTF-8"?>
<xsl:transform version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">
        <html>

        <head>
            <meta name="viewport" />
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
                crossorigin="anonymous" />

        </head>

        <body>
            <a href="./">Go back</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>Title</th>
                        <th>Year</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <xsl:for-each select="bookstore/book">
                        <xsl:sort select="price" order="ascending" data-type="number"></xsl:sort>
                        <tr>
                            <td>
                                <xsl:if test="./@id != ''">
                                    <xsl:value-of select="./@id" />
                                </xsl:if>
                                <xsl:if test="./@category != ''">
                                    <xsl:value-of select="./@category" />
                                </xsl:if>
                            </td>
                            <td>
                                <xsl:value-of select="category" />
                            </td>
                            <td><xsl:value-of select="author" /></td>
                            <td><xsl:value-of select="title" />
                                <xsl:if test="title/@lang != ''">
                                    (lang. <xsl:value-of select="title/@lang" />)
                                </xsl:if>
                            </td>
                            <td><xsl:value-of select="year" /></td>
                            <td><xsl:value-of select="price" /></td>
                        </tr>
                    </xsl:for-each>
                </tbody>
            </table>
            
            <h3>Category: Cooking</h3>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Author</th>
                        <th>Title</th>
                        <th>Year</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <xsl:for-each select="bookstore/book[category='cooking']">
                        <tr>
                            <td>
                                <xsl:if test="./@id != ''">
                                    <xsl:value-of select="./@id" />
                                </xsl:if>
                                <xsl:if test="./@category != ''">
                                    <xsl:value-of select="./@category" />
                                </xsl:if>
                            </td>
                            <td><xsl:value-of select="author" /></td>
                            <td><xsl:value-of select="title" />
                                <xsl:if test="title/@lang != ''">
                                    (lang. <xsl:value-of select="title/@lang" />)
                                </xsl:if>
                            </td>
                            <td><xsl:value-of select="year" /></td>
                            <td><xsl:value-of select="price" /></td>
                        </tr>
                    </xsl:for-each>

                </tbody>
            </table>

            <h3>Category: Children</h3>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Author</th>
                        <th>Title</th>
                        <th>Year</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <xsl:for-each select="bookstore/book[category='children']">
                        <tr>
                            <td>
                                <xsl:if test="./@id != ''">
                                    <xsl:value-of select="./@id" />
                                </xsl:if>
                                <xsl:if test="./@category != ''">
                                    <xsl:value-of select="./@category" />
                                </xsl:if>
                            </td>
                            <td><xsl:value-of select="author" /></td>
                            <td><xsl:value-of select="title" />
                                <xsl:if test="title/@lang != ''">
                                    (lang. <xsl:value-of select="title/@lang" />)
                                </xsl:if>
                            </td>
                            <td><xsl:value-of select="year" /></td>
                            <td><xsl:value-of select="price" /></td>
                        </tr>
                    </xsl:for-each>

                </tbody>
            </table>

            <h3>Category: Web</h3>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Author</th>
                        <th>Title</th>
                        <th>Year</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <xsl:for-each select="bookstore/book[category='web']">
                        <tr>
                            <td>
                                <xsl:if test="./@id != ''">
                                    <xsl:value-of select="./@id" />
                                </xsl:if>
                                <xsl:if test="./@category != ''">
                                    <xsl:value-of select="./@category" />
                                </xsl:if>
                            </td>
                            <td><xsl:value-of select="author" /></td>
                            <td><xsl:value-of select="title" />
                                <xsl:if test="title/@lang != ''">
                                    (lang. <xsl:value-of select="title/@lang" />)
                                </xsl:if>
                            </td>
                            <td><xsl:value-of select="year" /></td>
                            <td><xsl:value-of select="price" /></td>
                        </tr>
                    </xsl:for-each>

                </tbody>
            </table>

            <h3>Category: Fiction</h3>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Author</th>
                        <th>Title</th>
                        <th>Year</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <xsl:for-each select="bookstore/book[category='fiction']">
                        <tr>
                            <td>
                                <xsl:if test="./@id != ''">
                                    <xsl:value-of select="./@id" />
                                </xsl:if>
                                <xsl:if test="./@category != ''">
                                    <xsl:value-of select="./@category" />
                                </xsl:if>
                            </td>
                            <td><xsl:value-of select="author" /></td>
                            <td><xsl:value-of select="title" />
                                <xsl:if test="title/@lang != ''">
                                    (lang. <xsl:value-of select="title/@lang" />)
                                </xsl:if>
                            </td>
                            <td><xsl:value-of select="year" /></td>
                            <td><xsl:value-of select="price" /></td>
                        </tr>
                    </xsl:for-each>

                </tbody>
            </table>



        </body>

        </html>
    </xsl:template>


</xsl:transform>