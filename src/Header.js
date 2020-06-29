import React from 'react'
import { Link } from 'react-router-dom'
import { css } from 'emotion'

const headerStyle = css`
  background-color: skyblue;
`

const Header = () => {
  return (
    <div className={headerStyle}>
      <Link to='/'>闇市</Link>
      {'　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　'}
      <Link to='/my'>マイページ</Link>
      <div>　</div>
    </div>
  )
}

export default Header
