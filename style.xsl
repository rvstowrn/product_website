<?xml version="1.0"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body>
    <h2>User Table</h2>
    <table border="1">
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Username</th>
      </tr>
      <xsl:for-each select="all_employees/employee">
        <tr>
          <td><xsl:value-of select="name"/></td>
          <td><xsl:value-of select="email"/></td>
          <td><xsl:value-of select="username"/></td>
        </tr>
      </xsl:for-each>
    </table>
  </body>
  </html>
</xsl:template>

</xsl:stylesheet>
