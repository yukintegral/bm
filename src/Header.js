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
      {'　　　　　　　　　　　　　'}
      <input placeholder="何かお探しですか" />
      <Link to="/search?q=keybord"><button>送信</button></Link>
      {'　　　　　　　　　　　　　'}
      <Link to='/my'>マイページ</Link>
      <div>　</div>
    </div>
  )
}

export default Header
