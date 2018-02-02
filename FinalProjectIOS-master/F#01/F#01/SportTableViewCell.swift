//
//  SportTableViewCell.swift
//  F#01
//
//  Created by Kamalkhan Artykbayev on 19.04.16.
//  Copyright © 2016 Kamalkhan Artykbayev. All rights reserved.
//

import UIKit

class SportTableViewCell: UITableViewCell {

    @IBOutlet weak var labelInCell: UILabel!
    @IBOutlet weak var logoInCell: UIImageView!
    @IBOutlet weak var backInCell: UIImageView!
    override func awakeFromNib() {
        super.awakeFromNib()
        // Initialization code
    }

    override func setSelected(selected: Bool, animated: Bool) {
        super.setSelected(selected, animated: animated)

        // Configure the view for the selected state
    }

}
