import React, { useState } from 'react'
import { Link } from 'react-router-dom'
import { css } from 'emotion'

const headerStyle = css`
  background-color: skyblue;
`

const Header = () => {
  const [query, setQuery] = useState('')

  const handleQuery = (event) => {
    setQuery(event.target.value)
  }

  return (
    <div className={headerStyle}>
      <Link to='/'>闇市</Link>
      {'　　　　　　　　　　　　　'}
      <input 
        placeholder="何かお探しですか"
        value={query}
        onChange={handleQuery}
      />
      <Link to={`/search?q=${query}`}>
        <button>送信</button>
      </Link>
      {'　　　　　　　　　　　　　'}
      <Link to='/my'>マイページ</Link>
      <div>　</div>
    </div>
  )
}

export default Header
