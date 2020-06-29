import React from 'react'
import { Helmet } from 'react-helmet'
import Dropzone from 'react-dropzone'

// 参考資料
// https://dev.to/bnevilleoneill/the-ultimate-guide-to-drag-and-drop-in-react-5955
// https://shiro-goma.hatenablog.com/entry/2016/02/29/034215
const Sell = () => {
  return (
    <>
      <Helmet>
        <title>Sell.js</title>
      </Helmet>
      {/* acceptedFilesに画像が格納される */}
      <Dropzone
        accept='image/jpeg,image/png,image/jpg'
        onDrop={acceptedFiles => console.log(acceptedFiles)}
      >
        {({ getRootProps, getInputProps }) => (
          <section>
            <div {...getRootProps()}>
              <input {...getInputProps()} />
              <p>
                ドラッグアンドドロップかここをクリックで画像をアップできます。
                <br />
                今は画像をアップするとconsoleに内容が表示されます。
              </p>
              <p>形式: png/jpeg/jpg</p>
            </div>
          </section>
        )}
      </Dropzone>
    </>
  )
}

export default Sell
